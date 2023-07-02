<?php

app()->get('/', function () {
    response()->json(['message' => 'Karyo API']);
});

app()->get('/v1', function () {
    response()->json(['message' => 'Karyo API v1']);
});

app()->get('/v1/estudios', function () {
    response()->json(['message' => 'Karyo API v1 estudios']);
});
