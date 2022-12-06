<?php 
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\UsersModel;


    class Users extends ResourceController
    {
        use ResponseTrait;

        // all users
        public function index()
        {
            $model = new UsersModel();
            $data['users'] = $model->orderBy('Id_Users', 'DESC')->findAll();
            return $this->respond($data);
        }

        // create
        public function create()
        {
            $model = new UsersModel();
            $data =
            [
                'Nom' => $this->request->getVar('Nom'),
                'Adresse' => $this->request->getVar('Adresse'),
                'Email' => $this->request->getVar('Email'),
                'Login' => $this->request->getVar('Login'),
                'MDP' => $this->request->getVar('MDP'),
                'Role' => $this->request->getVar('Role'),
                'Telephone' => $this->request->getVar('Telephone'),
            ];
            
            $model->insert($data);
            $response = 
            [
                'status'   => 201,
                'error'    => null,
                'messages' => 
                [
                    'success' => 'Users created successfully'
                ]
            ];
            
            return $this->respondCreated($response);
        }

        // single user
        public function show($id = null)
        {
            $model = new UsersModel();
            $data = $model->where('Id_Users', $id)->first();
            
            if($data)
            {
                return $this->respond($data);
            }
            
            else
            {
                return $this->failNotFound('No Users found');
            }
        }

        // update
        public function update($id = null)
        {
            $model = new UsersModel();
            $id = $this->request->getVar('Id_Users');
            $data = 
            [
                'Nom' => $this->request->getVar('Nom'),
                'Adresse' => $this->request->getVar('Adresse'),
                'Email' => $this->request->getVar('Email'),
                'Login' => $this->request->getVar('Login'),
                'MDP' => $this->request->getVar('MDP'),
                'Role' => $this->request->getVar('Role'),
                'Telephone' => $this->request->getVar('Telephone'),
            ];
            $model->update($id, $data);
            $response = 
            [
            'status'   => 200,
            'error'    => null,
            'messages' => 
                [
                    'success' => 'Users updated successfully'
                ]
            ];
            
            return $this->respond($response);
        }

        // delete
        public function delete($id = null)
        {
            $model = new UsersModel();
            $data = $model->where('Id_Users', $id)->delete($id);
            
            if($data)
            {
                $model->delete($id);
                $response = 
                [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => 
                    [
                        'success' => 'Users successfully deleted'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }
            
            else
            {
                return $this->failNotFound('No Users found');
            }
        }
    }
?>