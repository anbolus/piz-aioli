<?php 
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\IngredientsModel;


    class Ingredients extends ResourceController
    {
        use ResponseTrait;

        // all users
        public function index()
        {
            $model = new IngredientsModel();
            $data['ingredients'] = $model->orderBy('Id_Ingredients', 'DESC')->findAll();
            return $this->respond($data);
        }

        // create
        public function create()
        {
            $model = new IngredientsModel();
            $data =
            [
                'Liste_Ingredients' => $this->request->getVar('Liste_Ingredients'),
            ];
            
            $model->insert($data);
            $response = 
            [
                'status'   => 201,
                'error'    => null,
                'messages' => 
                [
                    'success' => 'ingredient created successfully'
                ]
            ];
            
            return $this->respondCreated($response);
        }

        // single user
        public function show($id = null)
        {
            $model = new IngredientsModel();
            $data = $model->where('Id_Ingredients', $id)->first();
            
            if($data)
            {
                return $this->respond($data);
            }
            
            else
            {
                return $this->failNotFound('No ingredients found');
            }
        }

        // update
        public function update($id = null)
        {
            $model = new IngredientsModel();
            $id = $this->request->getVar('Id_Ingredients');
            $data = 
            [
                'Liste_Ingredients' => $this->request->getVar('Liste_Ingredients'),
            ];
            $model->update($id, $data);
            $response = 
            [
            'status'   => 200,
            'error'    => null,
            'messages' => 
                [
                    'success' => 'Ingredient updated successfully'
                ]
            ];
            
            return $this->respond($response);
        }

        // delete
        public function delete($id = null)
        {
            $model = new IngredientsModel();
            $data = $model->where('Id_Ingredients', $id)->delete($id);
            
            if($data)
            {
                $model->delete($id);
                $response = 
                [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => 
                    [
                        'success' => 'Ingrdient successfully deleted'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }
            
            else
            {
                return $this->failNotFound('No ingredients found');
            }
        }
    }
?>