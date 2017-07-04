# shop_sku
商品sku的实现过程


## git上传本地代码（TP框架）到GitHub

git init

git add .

git commit -m "注释语句"


配置：git config --global core.autocrlf false  

Create repository，就会进入到类似下面的一个页面，拿到创建的仓库的https地址: https://github.com/fanzhaogui/shop_sku

git remote add origin https://github.com/fanzhaogui/shop_sku

上传之前： git pull origin master

执行上传： git push -u origin master


## 系统出现如下错误：warning: LF will be replaced by CRLF
 
	原因分析：
	CRLF -- Carriage-Return Line-Feed 回车换行
	就是回车(CR, ASCII 13, \r) 换行(LF, ASCII 10, \n)。
	这两个ACSII字符不会在屏幕有任何输出，但在Windows中广泛使用来标识一行的结束。而在Linux/UNIX系统中只有换行符。
	也就是说在windows中的换行符为 CRLF， 而在linux下的换行符为：LF
	使用git来
