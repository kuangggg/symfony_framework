<?php

$input = $request->get('name', 'default');

$response->setContent(sprintf("hello %s", $input));