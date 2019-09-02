<?php
namespace App\Service;


class AvisService {
    public function countAvis( $avis = [] ) {
        $count = $avis->count();
        return $count;
    }
}