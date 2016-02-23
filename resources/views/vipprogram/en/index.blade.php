@extends('layout.page')
@section('title', trans('title.vipprogram'))

@section('content')
<img class="page ui fluid image" src="/images/about.jpg" alt="PICC VIP 会员计划" />
<div id="vip_program_content" class="page_container">
  <div class="ui grid container">
     <div class="ui column">
       <h3 class="ui red header">
         VIP Program
       </h3>
       <p>
         PICCVIP offers you a wide range of holiday activities and travel attractions that will make your next trip even more memorable! Whether you are planning a family vacation or a romantic getaway, PICCVIP has deals on tours, site seeing spots and activities for everyone and anyone. Browse our expansive selection of attractions by destination and build out your travel itinerary. From go-go city adventures in New York and Hong Kong to cultural exploration in Paris and London to beach-side fun in the sun in Pattaya and Phuket, PICCVIP knows how to help you prepare a proper holiday!
       </p>
       <h3 class="ui red header">
         PICCVIP Membership Program
       </h3>
       <p>
         PICCVIP has developed an exclusive membership program for PICC customers that aspire to have access to the world’s finest lifestyle management program tailored to meet your very day personal needs.
       </p>
       <h3 class="ui red header">
         Services We Provide Exclusively to our Members include:
       </h3>
     </div>
  </div>
</div>
@endsection

@section('scripts')
    @parent
    <script tyle="text/javascript">
        $('#vipprogram').addClass('active');
    </script>
@endsection
