<!--<form action="/cart/storeCheckout" method="post" id="cartForm">-->
<!--27June2024 T Blom --->
<form action="/cart/checkout" method="post" id="cartForm">
                            {{ csrf_field() }}
                            <input type="hidden" name="discount_id" value="{{$discount_id}}">

 </form>


<script>

 function submitForm() {
  document.getElementById("cartForm").submit();
}
submitForm() ;
</script>
