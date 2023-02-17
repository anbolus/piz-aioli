<?php 
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\ShopModel;


    class Shop extends ResourceController
    {
        use ResponseTrait;

        // all users
        public function index()
        {
            $model = new ShopModel();
            $data['shop'] = $model->orderBy('Id_Shop', 'DESC')->findAll();
            return $this->respond($data);
        }

        // create
        public function create()
        {
            $model = new ShopModel();
            $data =
            [
                'Nom' => $this->request->getVar('Nom'),
                'Adresse' => $this->request->getVar('Adresse'),
                'Presentation_Information' => $this->request->getVar('Presentation_Information'),
            ];
            
            $model->insert($data);
            $response = 
            [
                'status'   => 201,
                'error'    => null,
                'messages' => 
                [
                    'success' => 'Shop created successfully'
                ]
            ];
            
            return $this->respondCreated($response);
        }

        // single user
        public function show($id = null)
        {
            $model = new ShopModel();
            $data = $model->where('Id_Shop', $id)->first();
            
            if($data)
            {
                return $this->respond($data);
            }
            
            else
            {
                return $this->failNotFound('No shop found');
            }
        }

        // update
        public function update($id = null)
        {
            $model = new ShopModel();
            $id = $this->request->getVar('Id_Shop');
            $data = 
            [
                'Nom' => $this->request->getVar('Nom'),
                'Adresse' => $this->request->getVar('Adresse'),
                'Presentation_Information' => $this->request->getVar('Presentation_Information'),
            ];
            $model->update($id, $data);
            $response = 
            [
            'status'   => 200,
            'error'    => null,
            'messages' => 
                [
                    'success' => 'shop updated successfully'
                ]
            ];
            
            return $this->respond($response);
        }

        // delete
        public function delete($id = null)
        {
            $model = new ShopModel();
            $data = $model->where('Id_Shop', $id)->delete($id);
            
            if($data)
            {
                $model->delete($id);
                $response = 
                [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => 
                    [
                        'success' => 'shop successfully deleted'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }
            
            else
            {
                return $this->failNotFound('No shop found');
            }
        }
    }
?>