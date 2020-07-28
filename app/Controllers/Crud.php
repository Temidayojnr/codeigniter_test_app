<?php namespace App\Controllers;

use App\Models\CrudModel;

class Crud extends BaseController
{
    /**
     * @var CrudModel $crud_model
     */
    public $crud_model;

    public function initController(\CodeIgniter\HTTP\RequestInterface $request, \CodeIgniter\HTTP\ResponseInterface $response, \Psr\Log\LoggerInterface $logger)
    {
        parent::initController($request, $response, $logger);

        $this->crud_model = new CrudModel();
    }

    public function index()
    {
        $data['list'] = $this->crud_model->findAll();

        return view('CrudView', $data);
    }

    public function create()
    {
        $data = array(
            'lastName' => $this->request->getPost('lastName'),
            'firstName' => $this->request->getPost('firstName'),
            'birthDate' => $this->request->getPost('birthDate'),
            'contactNumber' => $this->request->getPost('contactNumber'),
            'bio' => $this->request->getPost('bio'),
        );

        $this->crud_model->createData($data);

        return redirect()->to(site_url('crud'));
    }

    public function getCruds()
    {

    }

    //--------------------------------------------------------------------

}
