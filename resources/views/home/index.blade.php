<!Doctype>
<html>
<head>
<style>
    .background{
        background-color: white;
        width: 100%;
    }
    .title{
        text-align: center;
        margin-left: 40%;
        margin-right: 40%;
        margin-bottom: 20px;
        border: solid red 1px;
    }
    .content{
        text-align: center;
        margin-left:25%;
        margin-right: 25%;
        margin-bottom: 25px;
        border: solid green 1px;
    }
    .banzi{
        background-color: #0b97c4;
        margin-left: 20%;
        margin-right: 20%;
        margin-bottom: -20px;
    }
    .paginate{
        margin-left: 35%;
        margin-top: 40px;
    }
</style>
    <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<div class="background">
    @foreach($post as $v)
        <div class="banzi">
    <div class="title">{{$v['title']}}</div>
    <div class="content">{{$v['content']}}</div>
        </div>
        @endforeach
        <div class="paginate">
        {{ $post->links()}}
        </div>
    <div class="test"></div>
</div>


</html>
<!-- jQuery 3 -->
<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- markdown -->
<script src="https://cdn.bootcss.com/showdown/1.3.0/showdown.min.js"></script>
<script>
    var content ='${post.content}'; //使用el表达式获取后台返回的markdown内容
    var converter = new showdown.Converter(); //初始化转换器
    var htmlcontent  = converter.makeHtml(content); //将MarkDown转为html格式的内容
    $(".test").html(htmlcontent);//添加到 div 中 显示出来
</script>
