<?php
    namespace Core\HTML;

    Class BootstrapForm extends Form{

        /**
         * @param string $name
         * @param string $label
         * @param array $option
         * @return string
         */
        public function input($name, $label, $option = []){
            $type = isset($option['type']) ? $option['type'] : 'text';
            $label = ' <label for="exampleInputEmail1" class="form-label">'. $label .'</label>';
            if($type === 'textarea'){
                $input = '<textarea class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="'. $name .'">'. $this->getValue($name) .'</textarea>';
            } else if($type === 'hidden'){
                $input = '<input type="'. $type .'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="'. $name .'" value="'. $_SESSION['auth'] .'" >';
                
            } else {
                $input = '<input type="'. $type .'" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="'. $name .'" >';
                
            }
            
            return $this->surround($label . $input);
        } 

        /**
         * @param string $name
         * @param string $label
         * @param array $option
         * @return string
         */
        public function select($name, $label, $options){
            $label = '<label>'. $label . '</label>';
            $input = '<select class="form-control" name="'. $name .'">';
            foreach($options as $key=>$value){
                $attributes = "";
                if($key == $this->getValue($name)){
                    $attributes = "selected";
                }
                $input .= "<option value='$key' $attributes>$value</option>"; 
            }
            $input .= '</select>';
            return $this->surround($label . $input);
        }

        /**
         * @return string
         */
        public function submit(){
            return $this->surround('<button type="submit" class="btn btn-primary">Enregistrer</button>');
        }

        /**
         * @param string $html
         * @return string
         */
        protected function surround($html){
            return '<div class="form-group">' . $html . '</div>';
        }

    }

    
