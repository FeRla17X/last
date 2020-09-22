<?php
  class Contrl extends Model{
    interface EDIT_PARAMETER{ public function edit($id,$new_parameter);}
      // ---------- CATEGORY EDIT CLASSES ----------
          class Edit_Category_Name implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Category_Section  implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Category_Color implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }

      // ---------- ACCOUNT EDIT CLASSES ----------
          class Edit_Account_Username implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Account_Password implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }

      // ---------- PRODUCT EDIT CLASSES ----------
          class Edit_Product_Title implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Price implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Img_dir implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Description implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Category implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Priorety implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Instock implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Rates implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }
          class Edit_Product_Sale implements EDIT_PARAMETER {
            public function edit($id,$new_parameter){

            }
          }


    // ---------- CUSTOMIZE CONTROL ----------
    public function customize_content($element,$src){
      //miige wina suratis saxeli
      //washale wina surati
      //migebuli wina suratis saxeli daarqvi axals
      //!! databasse ar gvjirdeba
    }
    public function customize_source($element,$src){
      //$this->costumize($element,$src);
    }

    // ---------- CATEGORY CONTROL ----------
    public function create_category($name,$section,$color){  }
    public function remove_category($name,$section){}
    public function edit_category($id,$new_parameter,EDIT_PARAMETER $edit_type){
      $edit_type->edit($id,$new_parameter);
    }

    // ---------- ACCOUNT CONTROL ----------
    public function create_account($user,$pwd,$permission){}
    public function remove_account($id,$admin_username,$admin_pwd){}
    public function edit_account($id,$new_parameter,EDIT_PARAMETER $edit_type){
      $edit_type->edit($id,$new_parameter);
    }

    // ---------- PRODUCT CONTROL ----------
    public function create_product($title,$price,$img_dir,$description,$category,$priorety,$instock,$rates,$sale){}
    public function remove_product($id){}
    public function edit_product($id,$new_parameter,EDIT_PARAMETER $edit_type){
      $edit_type->edit($id,$new_parameter);
    }

    // ---------- CAROUSEL CONTROL ----------
    Public function add_post($id,$index){}
    Public function remove_post($index){}

    // ---------- MAIL CONTROL ----------
    public function send_message($to,$message);

  }
