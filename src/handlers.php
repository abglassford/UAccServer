<?php

function getHandler ($request, $response) {
  $db = new QueryBuilder();
  $table = $request->getAttribute('table');
  $query = $db->selectAll($table);
  if (count($query)) {
    return $response->withJson($query, 200);
  } else {
    return $response->withJson(['Message'=>'404 Not Found'], 404);
  }
}

function getOneHandler ($request, $response) {
  $db = new QueryBuilder();
  $table = $request->getAttribute('table');
  $id = $request->getAttribute('id');
  $query = $db->selectOne($table, $id);
  if (count($query)) {
    return $response->withJson($query, 200);
  } else {
    return $response->withJson(['Message'=> $table . ' #' . $id . ' Not Found'], 404);
  }
}

function postUserHandler ($request, $response) {
  $db = new QueryBuilder();
  $query = $request->getParsedBody();
  if ($db->addUser('users', $query)) {
    return $response->withJson(['Message'=>'Success!'], 201);
  } else {
    return $response->withJson(['Message'=>'Server Error'], 500);
  }
}

function deleteRowHandler ($request, $response) {
  $db = new QueryBuilder();
  $table = $request->getAttribute('table');
  $id = $request->getAttribute('id');
  $query = $db->selectOne($table, $id);
  if (count($query)) {
    $db->removeOne($table, $id);
    return $response->withJson(['Message'=>'Success!'], 201);
  } else {
    return $response->withJson(['Message'=> $table . ' #' . $id . ' Not Found'], 404);
  }
}

function updateUserHandler ($request, $response) {
  $db = new QueryBuilder();
  $data = $request->getParsedBody();
  $table = $request->getAttribute('table');
  $id = $request->getAttribute('id');
  $query = $db->selectOne($table, $id);
  if (count($query)) {
    $db->update($table, $id, $data);
    return $response->withJson(['Message'=>'Success!'], 201);
  } else {
    return $response->withJson(['Message'=> $table . ' #' . $id . ' Not Found'], 404);
  }
}
