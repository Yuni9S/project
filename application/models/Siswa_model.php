<?php

class Siswa_model extends CI_Model
{
    public function create()
    {
        $data = array(
            'nama' => $this->input->post('txtnamasiswa'),
            'jk' => $this->input->post('txtjnskelamin'),
            'nama_ayah' => $this->input->post('txtnamaayah'),
            'nama_ibu' => $this->input->post('txtnamaibu'),
            'alamat' => $this->input->post('txtalamat')
        );

        return $this->db->insert('siswa', $data);
    }

    public function read()
    {
        $data = $this->db->get('siswa');
        return $data->result();
    }

    public function delete($id)
    {
        return $this->db->delete('siswa', array('id' => $id));
    }

    public function get_by_id($id)
    {
        $data = $this->db->get_where('siswa', array('id' => $id));
        return $data->row_array();
    }

    public function update($id)
    {
        $data = array(
            'nama' => $this->input->post('txtnamasiswa'),
            'jk' => $this->input->post('txtjnskelamin'),
            'nama_ayah' => $this->input->post('txtnamaayah'),
            'nama_ibu' => $this->input->post('txtnamaibu'),
            'alamat' => $this->input->post('txtalamat')
        );

        $this->db->where('id', $id);
        return $this->db->update('siswa', $data);
    }

   public function upload_gambar()
   $config['upload_path'] = 'gambar/';
   $config['alloed_types'] ='gif|jpg|png'
   $config['file_name'] =$this->nama;
   $config
   $config
}

