<?php

class User{

    const USERS = [
        array(1,"Pedro"),
        array(2,"Elena"),
        array(3,"Francisco"),
        array(4,"Blanca")
    ];

    // @return Array con los datos de los usuarios
    public static function all() {
        return User::USERS;
    }//all


    // @return devuelve un usuario en particular
    // @param $id
    public static function find($id) {
        return User::USERS[$id-1];
        
    }//find

} // finclass