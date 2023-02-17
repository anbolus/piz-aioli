<?php 
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\PizzaModel;


    class Pizza extends ResourceController
    {
        use ResponseTrait;

// Toutes les pizzas
        public function index()
        {
            $model = new PizzaModel();
            $data['pizza'] = $model->orderBy('Id_Pizza', 'DESC')->findAll();
            return $this->respond($data);
            echo view('/GestionPizza');
        }

// Créer une nouvelle pizza
        public function create()
        {
            $model = new PizzaModel();
            $data =
            [
                'Taille' => $this->request->getVar('Taille'),
                'Nom'  => $this->request->getVar('Nom'),
                'Prix'  => $this->request->getVar('Prix'),
                'Image' => $this->request->getVar('Image')
            ];
            
            $model->insert($data);
            $response = 
            [
                'status'   => 201,
                'error'    => null,
                'messages' => 
                [
                    'success' => 'Pizza created successfully'
                ]
            ];
            
            return $this->respondCreated($response);
        }

// Une seule pizza
        public function show($id = null)
        {
            $model = new PizzaModel();
            $data = $model->where('Id_Pizza', $id)->first();
            
            if($data)
            {
                return $this->respond($data);
            }
            
            else
            {
                return $this->failNotFound('No pizza found');
            }
        }

//Update une pizza
        public function update($id = null)
        {
            $model = new PizzaModel();
            $id = $this->request->getVar('Id_Pizza');
            $data = 
            [
                'Taille' => $this->request->getVar('Taille'),
                'Nom'  => $this->request->getVar('Nom'),
                'Prix'  => $this->request->getVar('Prix'),
                'Image' => $this->request->getVar('Image')
            ];
            $model->update($id, $data);
            $response = 
            [
            'status'   => 200,
            'error'    => null,
            'messages' => 
                [
                    'success' => 'Pizza updated successfully'
                ]
            ];
            
            return $this->respond($response);
        }

//Delete une pizza
        public function delete($id = null)
        {
            $model = new PizzaModel();
            $data = $model->where('Id_Pizza', $id)->delete($id);
            
            if($data)
            {
                $model->delete($id);
                $response = 
                [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => 
                    [
                        'success' => 'Pizza successfully deleted'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }
            
            else
            {
                return $this->failNotFound('No pizza found');
            }
        }
    }
?>