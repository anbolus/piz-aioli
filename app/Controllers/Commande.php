<?php 
    namespace App\Controllers;
    use CodeIgniter\RESTful\ResourceController;
    use CodeIgniter\API\ResponseTrait;
    use App\Models\CommandeModel;


    class Commande extends ResourceController
    {
        use ResponseTrait;

        // all users
        public function index()
        {
            $model = new CommandeModel();
            $data['commande'] = $model->orderBy('Id_Commande', 'DESC')->findAll();
            return $this->respond($data);
        }

        // create
        public function create()
        {
            $model = new CommandeModel();
            $data =
            [
                'Taille' => $this->request->getVar('Nom'),
                'Adresse'  => $this->request->getVar('Adresse'),
                'Nom'  => $this->request->getVar('Prix'),
                'Heure_Commande'  => $this->request->getVar('Heure_Commande'),
                'Date_Commande'  => $this->request->getVar('Date_Commande'),
                'Statut_Commande'  => $this->request->getVar('Statut_Commande'),
            ];
            
            $model->insert($data);
            $response = 
            [
                'status'   => 201,
                'error'    => null,
                'messages' => 
                [
                    'success' => 'Order created successfully'
                ]
            ];
            
            return $this->respondCreated($response);
        }

        // single user
        public function show($id = null)
        {
            $model = new CommandeModel();
            $data = $model->where('Id_Commande', $id)->first();
            
            if($data)
            {
                return $this->respond($data);
            }
            
            else
            {
                return $this->failNotFound('No order found');
            }
        }

        // update
        public function update($id = null)
        {
            $model = new CommandeModel();
            $id = $this->request->getVar('Id_Commande');
            $data = 
            [
                'Taille' => $this->request->getVar('Nom'),
                'Nom'  => $this->request->getVar('Adresse'),
                'Prix'  => $this->request->getVar('Prix'),
                'Heure_Commande' => $this->request->getVar('Heure_Commande'),
                'Date_Commande' => $this->request->getVar('Date_Commande'),
                'Statut_Commande' => $this->request->getVar('Statut_Commande'),
            ];
            $model->update($id, $data);
            $response = 
            [
            'status'   => 200,
            'error'    => null,
            'messages' => 
                [
                    'success' => 'Order updated successfully'
                ]
            ];
            
            return $this->respond($response);
        }

        // delete
        public function delete($id = null)
        {
            $model = new CommandeModel();
            $data = $model->where('Id_Commande', $id)->delete($id);
            
            if($data)
            {
                $model->delete($id);
                $response = 
                [
                    'status'   => 200,
                    'error'    => null,
                    'messages' => 
                    [
                        'success' => 'Order successfully deleted'
                    ]
                ];
                
                return $this->respondDeleted($response);
            }
            
            else
            {
                return $this->failNotFound('No order found');
            }
        }
    }
?>