@extends('master')
@section('content')

<?php 

use App\FactoryMethod\Creator;

# ��� � ������� ��������� �����
$x = new Creator;
# ��� � ������� �����,��� ��������� ������ ��������
echo $x->createProduct()->operation();



?>





@endsection
