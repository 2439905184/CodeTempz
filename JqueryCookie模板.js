<!--jquery cookie cdn -->
<script src="https://cdn.staticfile.org/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
//创建cookie key value 类比json 其他参数为expires 和path :'/' expires后面是数字（过期天数）
//如果不设置 默认存于浏览器内存 path是cookie的作用范围 一般写根目录
$.cookie('key','value',{'其他参数'})
//读取cookie
$.cookie("key")
//读取所有cookie信息
$.cookie()
//删除cookie
$.removeCookie('key')
//写入使用了path属性时 读取也需要实用相同的属性
$.removeCookie('key',{path:'/'})
//注意删除cookie时，必须传递用于设置cookie的完全相同的路径、域及安全选项
