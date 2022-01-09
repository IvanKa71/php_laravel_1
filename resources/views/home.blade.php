@extends('layout')

@section('title')Главная страница@endsection

@section('main_content')
<div class=" container pricing-header p-3 pb-md-4 mx-auto text-center btn-warning">
      <h1 class="display-4 fw-normal">Главная страница</h1>
      <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container mt-5">
        <h3 class="mb-5">Наши статьи</h3>
        <div class="d-flex flex-wrap">
       
        <?php
           for($i = 0; $i < 3; $i++):
        ?>
         <div class="card-body">
            <ul class="list-unstyled mt-3 mb-4">
              <h1>Heading</h1>
              <li>Some text</li>
              <li>Some text</li>
              <li>Some text</li>
              <li>Some text</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Подробнее</button>
          </div>
        
      
      <?php endfor; ?>
    
    </div>
    </div>
@endsection