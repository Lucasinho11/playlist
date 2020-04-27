<?php
function getArtists($artistId = null){

    $db = dbConnect();

    $query = $db->query('SELECT * FROM artist');
    $artists = $query->fetchAll();
    return $artists;
}

function getArtist($id){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM artist WHERE id = ?');
    $artist = $query->execute( [ $id ] );
    if ($artist){
        return $query->fetch();
    }else {
        return false;
    }
}
