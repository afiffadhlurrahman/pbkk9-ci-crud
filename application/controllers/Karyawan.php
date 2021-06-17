<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("karyawan_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["karyawan"] = $this->karyawan_model->getAll();
        $this->load->view("list", $data);
    }

    public function add()
    {
        $karyawa = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawa->rules());

        if ($validation->run()) {
            $karyawa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('karyawan/index'));
        }

        $this->load->view("new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('karyawan/');
       
        $karyawa = $this->karyawan_model;
        $validation = $this->form_validation;
        $validation->set_rules($karyawa->rules());

        if ($validation->run()) {
            $karyawa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
            redirect(site_url('karyawan/index'));
        }

        $data["karyawa"] = $karyawa->getById($id);
        if (!$data["karyawa"]) show_404();
        
        $this->load->view("edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->karyawan_model->delete($id)) {
            redirect(site_url('karyawan/'));
        }
    }
}

>