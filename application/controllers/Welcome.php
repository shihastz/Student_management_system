<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Welcome extends CI_Controller {  

    public function __construct()
    {
        parent::__construct();
        $this->load->model("Mainmodel"); 

        $this->load->library('pagination');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
    }
      
    public function index()  
    {  
        
        $id = $this->uri->segment(3);
          $data['students'] = $this->Mainmodel->show_students();
          $data['single_student'] = $this->Mainmodel->show_student_id($id);
          $this->load->view('delete_view', $data);


             //$this->load->view("myview"); 



    }  


      public function reg()  
    {  
        
        $this->load->view("myview1");  
    }  


    function savingdata()  
    {  
        //this array is used to get fetch data from the view page.  
      /* $data = array(  
                        'name'     => $this->input->post('uname'),  
                        'pwd'  => $this->input->post('psw'),  
                       ); 
        //insert data into database table.  
        //$this->db->insert('table1',$data);  
  
        //redirect("Welcome/index");  
        //echo "hii";*/

       $data['reg_name'] =  $this->input->post('uname');  
       $data['reg_email'] =  $this->input->post('email'); 
       $data['reg_password'] =  $this->input->post('psw');  
                  
       $out = $this->Mainmodel->insert($data);
       if($out ==1)
       {
         $this->load->view("myview1");

       }
       else
       {
        echo "Error";
       }
       //print_r($data);
    }  
    function login() 
        {
            $data['reg_name'] =  $this->input->post('uname'); 
            $data['reg_password'] =  $this->input->post('psw');

            $out = $this->Mainmodel->logindata($data);
             if($out ==1)
           {
             $this->load->view("myview1");

           }
           else
           {
            echo "Error";
           }
        }



        //different
        //showing data and deleting

        // Function to Fetch selected record from database.
      /*function show_student_id() 
      {
          $id = $this->uri->segment(3);
          $data['students'] = $this->main_model->show_students();
          $data['single_student'] = $this->main_model->show_student_id($id);
          $this->load->view('delete_view', $data);
      }*/

      // Function to Delete selected record from database.
      function delete_student_id() 
      {
        $id = $this->uri->segment(3);
        $this->Mainmodel->delete_student_id($id);

        $this->index();

      }


      //showing and updating

      function show_student_id() {
        $id = $this->uri->segment(3);
        $data['students'] = $this->Mainmodel->show_students();
        $data['single_student'] = $this->Mainmodel->show_student_id($id);
        $this->load->view('update_view', $data);
        }
      function update_student_id1() {
        $id= $this->input->post('did');
        $data = array(
        'student_name' => $this->input->post('dname'),
        'student_email' => $this->input->post('demail'),
        'student_contact' => $this->input->post('dmobile'),
        'student_address' => $this->input->post('daddress')
        );
        $this->Mainmodel->update_student_id1($id,$data);
        $this->show_student_id();
        }


        //ajax method

        function ajax() 
        {

          $this->load->view("ajax_view");

        }

        // This function call from AJAX
        public function user_data_submit() {
          $data = array(
          'username' => $this->input->post('name'),
          'pwd'=>$this->input->post('pwd')
        );

        //Either you can print value or you can send value to database
           echo json_encode($data);
        }


          function ajaxformfirst(){

            $this->load->view('ajaxdb_view');
          }



        function ajaxform()
        {

            $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); // Displaying Errors in Div$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]'); // Validation for Name Field
            $this->form_validation->set_rules('demail', 'Email', 'required|valid_email'); // Validation for E-mail field.
            $this->form_validation->set_rules('dmobile', 'Contact No.', 'required|regex_match[/^[0-9]{10}$/]'); // Validation for Contact Field.
            $this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]'); // Validation for Address Field.
          if ($this->form_validation->run() == FALSE) 
          {
              $this->load->view('ajaxdb_view');
          }else {
          // Initializing database table columns.
              $data = array(
              'student_name' => $this->input->post('dname'),
              'student_email' => $this->input->post('demail'),
              'student_contact' => $this->input->post('dmobile'),
              'student_address' => $this->input->post('daddress')
              );
              $this->Mainmodel->form_insert($data); // Calling Insert Model and its function.
              echo "<script>alert('Form Submitted Successfully....!!!! ');</script>";
              $this->show_student_id(); // Reloading after submit.
              }
          }
          



        


}  
?>  