<?php

class PagesController extends AppController {

    var $name = 'Pages';
    var $components = array('RequestHandler');
    var $helpers = array('Ajax', 'Javascript');

    var $uses = array('Empleado', 'Contrato');

    function display() {
        $this->redirect(array('action' => 'index'));
    }

    function index(){
        $fecha = new DateTime('NOW');
        $noContratadosMes = $noEmpleados = $this->Contrato->find('count', array(
            'joins' => array(
                array(
                    'table' => 'empleados',
                    'alias' => 'EmpleadoJoin',
                    'type' => 'INNER',
                    'conditions' => array(
                        'EmpleadoJoin.id = Contrato.empleado_id'
                    )
                )
            ),
            'conditions' => array(
                'Contrato.FECHA_INI' => "BETWEEN ". $fecha->format("Y-m-1") . " AND " .$fecha->format("Y-m-30")
            )
        ));
        $noEmpleados = $this->Contrato->find('count', array(
            'joins' => array(
                array(
                    'table' => 'empleados',
                    'alias' => 'EmpleadoJoin',
                    'type' => 'INNER',
                    'conditions' => array(
                        'EmpleadoJoin.id = Contrato.empleado_id'
                    )
                )
            )
        ));
        $this->set(compact('empleados','noContratadosMes','noEmpleados'));


    }

}