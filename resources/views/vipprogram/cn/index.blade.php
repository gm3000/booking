@extends('layout.page')
@section('title', trans('title.vipprogram'))

@section('content')
<img class="page ui fluid image" src="/images/about.jpg" alt="PICC VIP 会员计划" />
<div id="vip_program_content" class="page_container">
  <div class="ui grid container">
     <div class="ui column">
       <h3 class="ui red header">
         旅游套餐
       </h3>
       <p>
         PICCVIP之旅为您准备了大量假日活动项目，将让您的每次旅行都值得回味！无论您计划全家出行、还是打造一个浪漫的旅程，CMBVIP之旅都可以提供您所需要的旅游观光特价产品!请按照目的地随意浏览我们海量特价产品，使你们的旅程丰满充实。无论您是要在纽约或香港探秘繁华，还是要去巴黎或伦敦感受其文化底蕴，抑或去普吉岛和芭提雅享受海天之乐，CMBVIP之旅都知道如何帮您打造完美假日！
       </p>
       <h3 class="ui red header">
         PICC VIP 之旅会员专享计划
       </h3>
       <p>
         PICCVIP之旅针对招商银行客户的个性化需求，提供了独有的高端旅游产品。只要您想要得到全球最好的奢华体验，我们都可以让您满足！
       </p>
       <h3 class="ui red header">
         我们独有的专属服务包括以下项目:
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
