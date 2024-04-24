<h3> Fornecedor </h3>

@php
 /*
if() {

}elseif(){

} else {

}
*/

@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10 )
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count ($fornecedores) > 10)
    <h3> Existem masi de 10 fornecedores cadastrados</h3>
@else  
     <h3> Ainda não existem fornecedores cadastrados</h3>
@endif