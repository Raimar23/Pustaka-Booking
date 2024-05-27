<?php
class Autentifikasi extends CI_Controller
{
  public function index()
  {
    if ($this->session->userdata('email')) {
      redirect('user');
    }

    $this->form_validation->set_rules('email', 'Email Address', 'required|trim|valid_email', [
      'required' => 'Email is required!',
      'valid_email' => 'Invalid email format!'
    ]);
    $this->form_validation->set_rules('password', 'Password', 'required|trim', [
      'required' => 'Password is required!'
    ]);

    if ($this->form_validation->run() === false) {
      $data['title'] = 'Login'; // Use 'title' for better readability
      $data['user'] = '';
      $this->load->view('templates/aute_header', $data);
      $this->load->view('autentifikasi/login');
      $this->load->view('templates/aute_footer');
    } else {
      $this->_login();
    }
  }

  private function _login()
  {
    $email = htmlspecialchars($this->input->post('email', true));
    $password = $this->input->post('password', true);

    // Use prepared statements in ModelUser->cekData
    $user = $this->ModelUser->checkUser($email);

    if ($user) {
      if ($user['is_active'] === 1) {
        if (password_verify($password, $user['password'])) {
          $sessionData = [
            'email' => $user['email'],
            'role_id' => $user['role_id']
          ];
          $this->session->set_userdata($sessionData);

          if ($user['role_id'] === 1) {
            redirect('admin');
          } else {
            $profileMessage = $user['image'] === 'default.jpg' ? '<div class="alert alert-info alert-message" role="alert">Please update your profile to change profile picture</div>' : '';
            $this->session->set_flashdata('message', $profileMessage);
            redirect('user');
          }
        } else {
          $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Incorrect password!</div>');
          redirect('autentifikasi');
        }
      } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">User not activated!</div>');
        redirect('autentifikasi');
      }
    } else {
      $this->session->set_flashdata('message', '<div class="alert alert-danger alert-message" role="alert">Email not registered!</div>');
      redirect('autentifikasi');
    }
  }
}

?>