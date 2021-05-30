<?php

    class animal{
        static $Animal = null;
        private $raza;

        function __construct(object $arg){
            $this->raza = $arg->RAZA;
        }
        public function getRaza():string{
            return $this->raza;
        }

        static function getins(){
            $arg = (func_num_args()!=0)? (object) func_get_args()[0] : (object) ["RAZA" => "CANINO"];
            return self::$Animal = (!(self::$Animal instanceof self))? new animal($arg) : self::$Animal;
        }
        private function saludar(){
            return "Hola mundo.";
        }
        public function getSaludar(){
            return $this->saludar();
        }
    }
    print_r(animal::getins((array) ["RAZA" => "FELINO"])->getRaza());
    print_r("<br>");
    print_r(animal::getins()->getSaludar());
    // /**
    //  * Clase humanos
    //  * @property string $crecimientoe efe
    //  * @method acceso() cuando la edad es correcta
    //  */
    // class humanos{
    //     static $crecimiento;
    //     /**
    //      * Metodo para verificar si tiene 18 o mas
    //      * @internal
    //      * if($arg>=18){
    //      *      return true;
    //      * }else{
    //      *      return false;
    //      * }  == ($arg>=18) ? true : false
    //      * @param int $arg la edad del usuario
    //      * @return string devuelve el booliano si la edad es mayor a 18
    //      * @author JaMeS
    //      */
    //     static function verificar (int $arg):string{
    //         $obj = new humanos();
    //         return $obj ->acceso(($arg>=18) ? true: false);
    //     }
    //     /**
    //      * Metodo para dar acceso a la mayoria de edad
    //      * @param bool $arg Por medio del metodo static function verificamos si es mayor de edad para acceder al metodo y mostrar sy resultadi
    //      * @return string devuelve un mensaje si fue correcto y un vacio si el parametro fue falso
    //      * @author JaMeS
    //      */
    //     protected function acceso(bool $arg):string{
    //         return ($arg) ? (string) "Puede pasar." : (string) "";
    //     }
    // }
    
    // print_r(humanos::verificar(18));

?>