<?php 
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\PizzaPersoModel;


    class PizzaPerso extends ResourceController
    {
        use ResponseTrait;

        // all PizzaPerso
        public function index()
        {
            $model = new PizzaPersoModel();
            $data['pizzaperso'] = $model->orderBy('Id_PizzaPerso', 'DESC')->findAll();
            return $this->respond($data);
        }

        // create
        public function create()
        {
            $model = new PizzaPersoModel();
            $data =
            [
                'Nom' => $this->request->getVar('Nom'),
            ];
            
            $model->insert($data);
            $response = 
            [
                'status'   => 201,
                'error'    => null,
                'messages' => 
                [
                    'success' => 'PizzaPerso created successfully'
                ]
            ];
            
            return $this->respondCreated($response);
        }

        // single user
        public function show($id = null)
        {
            $model = new PizzaPersoModel();
            $data = $model->where('Id_PizzaPerso', $id)->first();
            
            if($data)
            {
                return $this->respond($data);
            }
            
            else
            {
                return $this->failNotFound('No PizzaPerso found');
            }
        }

        // update
        public function update($id = null)
        {
            $model = new PizzaPersoModel();
            $id = $this->request->getVar('Id_PizzaPerso');
            $data = 
            [
                'Nom' => $this->request->getVar('Nom'),
            ];
            $model->update($id, $data);
            $response = 
            [
            'status'   => 200,
            'error'    => null,
            'messages' => 
                [
                    'success' => 'PizzaPerso updated successfully'
                ]
            ];
            
            return $this->respond($response);
        }

        // delete
        public function delete($id = null)
        {
            $model = new PizzaPersoModel();
            $data = $model->where('Id_PizzaPerso', $id)->delete($id);
            
            if($data)
            {
                $model->delete($id);
                $response = 
                [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => 
                    [
                        'success' => 'PizzaPerso successfully deleted'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }
            
            else
            {
                return $this->failNotFound('No PizzaPerso found');
            }
        }
    }
?>