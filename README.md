# :gift:Present

Present is presented by Zapic:gift_heart:.  
一个简洁的个人主页,支持显示博客文章/随机背景图片/随机语句.  
[即时预览](https://kawaiizapic.github.io/Present/)
![preview.png](https://i.loli.net/2020/11/15/ukl6jRxNm8O7bD2.png)

### Browser support:
|  IE   | Chrome  | Firefox   | Other  |
|  ----  | ----  |  ----  | ----  |
| 11+(Partial Support)  | 49+ | 52+  | (?) |

## Setting-up:

### 随机背景图片
1. 将图片放入`static/img/`内.
2. 建议放入一个图片的缩略图优化加载体验.
3. 在`index.html`内找到`var bgArr = [...`
4. 按以下格式添加一个对象:
```
{
	"url": "static/img/background.jpg",
	"thumb": "static/img/background-thumb.jpg" // 如果没有缩略图,可以留空.
}
```
5. 如果不会可以简单的学一下`JavaScript`语法.

### 随机语句
1. 在`index.html`内找到`var senArr = [...`
2. 按照 [Typinyin.js](https://github.com/ClassicOldSong/typinyin.js) 的文档添加语句.
3. 如果不会可以简单的学一下`JavaScript`语法.


### 博客文章输出

#### JSON模式
此模式无需设置跨域,仅需提供PHP支持,由后端解析XML文档,传输数据量较少,推荐使用.  
**注意:** 使用本功能,你的服务器必须支持`PHP 5.6+`,并启用`XML`拓展.

1. 在`index.html`内找到`var feedType=...`,修改为`json`.
2. 在`feed.php`内找到`$feed_url`;
3. 将`$feed_url`修改为你的博客RSS订阅地址.
4. 如果不会可以简单的学一下`PHP`语法.

#### XML模式
此模式**需设置** 跨域,无需提供PHP支持,由前端解析XML文档,传输数据量较多,在无PHP环境情况下推荐使用.  
此处不提供跨域教程,请自行搜索.

1. 在`index.html`内找到`var feedType=...`,修改为`xml`,
2. 在`index.html`内找到`var feedPath=...`,修改为你的博客RSS地址,如`https://blog.me/feed`;
3. 如果不会可以简单的学一下`JavaScript`语法.

### 链接图标
链接图标列表: [Font Awesome](https://fontawesome.dashgame.com/)  
1. 在列表里找到心仪的图标
2. 点击`复制`按钮
3. 找到需要修改的图标(图标元素均为`i`,拥有`fa`类)
4. 删除原有的图标class(`fa-*`),将新的粘贴进去.
