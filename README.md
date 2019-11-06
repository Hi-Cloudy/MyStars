# Tools


## MD文档语法

```
一、标题写法：
第一种方法：
1、在文本下面加上 等于号 = ，那么上方的文本就变成了大标题。等于号的个数无限制，但一定要大于0个哦。。
2、在文本下面加上 下划线 - ，那么上方的文本就变成了中标题，同样的 下划线个数无限制。
3、要想输入=号，上面有文本而不让其转化为大标题，则需要在两者之间加一个空行。
另一种方法：（推荐这种方法；注意⚠️中间需要有一个空格）
关于标题还有等级表示法，分为六个等级，显示的文本大小依次减小。不同等级之间是以井号  #  的个数来标识的。一级标题有一个 #，二级标题有两个# ，以此类推。
例如：
# 一级标题  
## 二级标题  
### 三级标题  
#### 四级标题  
##### 五级标题  
###### 六级标题 
二、编辑基本语法  
1、字体格式强调
 我们可以使用下面的方式给我们的文本添加强调的效果
*强调*  (示例：斜体)  
 _强调_  (示例：斜体)  
**加重强调**  (示例：粗体)  
 __加重强调__ (示例：粗体)  
***特别强调*** (示例：粗斜体)  
___特别强调___  (示例：粗斜体)  
2、代码  
`<hello world>`  
3、代码块高亮  

@Override
protected void onDestroy() {
    EventBus.getDefault().unregister(this);
    super.onDestroy();
}

4、表格 （建议在表格前空一行，否则可能影响表格无法显示）
 
 表头  | 表头  | 表头
 ---- | ----- | ------  
 单元格内容  | 单元格内容 | 单元格内容 
 单元格内容  | 单元格内容 | 单元格内容  
 
5、其他引用
图片  
![图片名称](https://www.baidu.com/img/bd_logo1.png)  
链接  
[链接名称](https://www.baidu.com/)    
6、列表 
1. 项目1  
2. 项目2  
3. 项目3  
   * 项目1 （一个*号会显示为一个黑点，注意⚠️有空格，否则直接显示为*项目1） 
   * 项目2   
 
7、换行（建议直接在前一行后面补两个空格）
直接回车不能换行，  
可以在上一行文本后面补两个空格，  
这样下一行的文本就换行了。
或者就是在两行文本直接加一个空行。
也能实现换行效果，不过这个行间距有点大。  
 
8、引用
> 第一行引用文字  
> 第二行引用文字  

```

## 工具

| name                                                         | desc                                                         |
| :----------------------------------------------------------- | ------------------------------------------------------------ |
| [navicat-keygen](https://github.com/DoubleLabyrinth/navicat-keygen) | 这份 repo 将会告诉你 Navicat 是怎么完成离线激活的。          |
| [protobuf](https://github.com/protocolbuffers/protobuf)      | 协议缓冲区 - 谷歌的数据交换格式。                            |
| [oh-my-zsh](https://github.com/robbyrussell/oh-my-zsh)       | Mac 和 Linux 的终端主题美化工具。                            |
| [wmi](https://github.com/StackExchange/wmi) | WMI for Go |
| [baidu-netdisk-downloaderx](https://github.com/b3log/baidu-netdisk-downloaderx) | ⚡️ 一款图形界面的百度网盘不限速下载器，支持 Windows、Linux 和 Mac。 |
| [Motrix](https://github.com/agalwood/Motrix) | 功能齐全的下载管理器。 |
| [zsh-syntax-highlighting](https://github.com/zsh-users/zsh-syntax-highlighting) | Zsh 的语法高亮。 |
| [TranslatorX](https://github.com/pingfangx/TranslatorX) | JetBrains 系列软件汉化包。 |
| [solarized](https://github.com/altercation/solarized) | 适用于多种应用（终端，vim等）的精确配色方案，具有暗/亮模式。 |
| [powerline-fonts](https://github.com/powerline/fonts) | Powerline 用户的修补字体。 |


## .NET方向

| name                                                      | desc                                 |
| --------------------------------------------------------- | ------------------------------------ |
| [.NET CORE](https://github.com/aspnet/AspNetCore.Docs)    | .NET CORE官方文档 |
| [Java学习+面试指南](https://github.com/Hi-Cloudy/JavaGuide)| 【Java学习+面试指南】 一份涵盖大部分Java程序员所需要掌握的核心知识https://gitee.com/SnailClimb/JavaGuide                                     |
| [CS-Notes](https://github.com/Hi-Cloudy/CS-Notes)         | :books: 技术面试必备基础知识、Leetcode、Java、C++、Python、后端面试、计算机操作系统、计算机网络、系统设计 |




## Go 语言

| name                                                         | desc                                                         |
| :----------------------------------------------------------- | ------------------------------------------------------------ |
| [go](https://github.com/golang/go)                           | The Go programming language                                  |
| [ui](https://github.com/andlabs/ui)                          | Go 的平台原生 GUI 库。                                       |
| [mysql](https://github.com/go-sql-driver/mysql)              | Go 的 MySQL 驱动程序。                                       |
| [protobuf](https://github.com/golang/protobuf)               | 支持 Google 的协议缓冲区。                                   |
| [msgpack](https://github.com/vmihailenco/msgpack)            | 一种 Go 的 msgpack 数据格式编码。                            |
| [go-adodb](https://github.com/mattn/go-adodb)                | Go 的  adodb 数据库驱动程序。                                |
| [awesome-go-cn](https://github.com/yinggaozhen/awesome-go-cn) | 一个很棒的 Go 框架、库和软件的中文收录大全。⏰ 脚本定期与英文文档同步，包含了各工程 star数 / 最近更新时间，助您快速发现优质项目。Awesome Go~ |
| [fasthttp](https://github.com/valyala/fasthttp)              | Go 的快速 HTTP 包。调整为高性能，热路径中的零内存分配，比 `net/http` 快10倍。 |
| [gin](https://github.com/gin-gonic/gin)                      | Gin 是一个用 Go (Golang) 编写的 HTTP Web 框架。具有更好的性能 - 速度提高了 40 倍。 |
| [cli](https://github.com/urfave/cli)                         | 用于在 Go 中构建命令行应用程序。                             |
| [gostudy](https://github.com/pingguoxueyuan/gostudy)         | gostudy 是关于 golang 的学习教程，采用通俗易懂、实践和理论相结合的方式，阐述 golang 各个方面的特性，尽快让初学者通过项目实践，快速的上手并成为经验丰富的 golang 开发者。 |
| [qt](https://github.com/therecipe/qt) | Go 的 Qt GUI 绑定。 |
| [qt.go](https://github.com/kitech/qt.go) | Go ( Golang ) 的 Qt 绑定目标再次获得 Go 的编译速度。 |
| [goproxy.cn](https://github.com/goproxy/goproxy.cn) | 中国最值得信赖的 Go 模块代理。 |
| [goconfig](https://github.com/unknwon/goconfig) | 包goconfig是一个功能齐全的注释支持配置文件 (.ini) 解析器。 |
| [gorm](https://github.com/jinzhu/gorm) | Golang梦幻般的ORM库旨在让开发人员更加友好。 |
| [kratos](https://github.com/bilibili/kratos) | Kratos 是 bilibili 开源的一套 Go 微服务框架，包含大量微服务相关框架及工具。 |

## Swift

| name                                                         | desc                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| [CryptoSwift](https://github.com/krzyzanowskim/CryptoSwift)  | CryptoSwift 是一个不断增长的标准和安全加密算法集合，在 Swift 中实现。 |
| [chisel](https://github.com/facebook/chisel)                 | Chisel 是 LLDB 命令的集合，用于帮助调试 iOS 应用程序。       |
| [HandyJSON](https://github.com/alibaba/HandyJSON)            | 一个方便的 swift json-object 序列化 / 反序列化库。           |
| [Moya](https://github.com/Moya/Moya)                         | 用 Swift 编写的网络抽象层。                                  |
| [Carthage](https://github.com/Carthage/Carthage)             | Cocoa 的一个简单的，分散的依赖管理器。                       |
| [RxSwift](https://github.com/ReactiveX/RxSwift)              | Reactive Programming in Swift.                               |
| [RxDataSources](https://github.com/RxSwiftCommunity/RxDataSources) | RxSwift 的 UITableView 和 UICollectionView 数据源 ( 部分，动画更新，编辑…… ) 。 |
| [pop](https://github.com/facebook/pop)                       | 可扩展的 iOS 和 OS X 动画库，适用于基于物理的交互。          |
| [SwiftyJSON](https://github.com/SwiftyJSON/SwiftyJSON)       | 在 Swift 中处理 JSON 数据的更好方法。                        |
| [XLPagerTabStrip](https://github.com/xmartlabs/XLPagerTabStrip) | 适用于 iOS 的 Android PagerTabStrip。                        |
| [PKHUD](https://github.com/pkluz/PKHUD)                      | 基于 Swift 的 iOS 8 重新实现 Apple HUD ( 音量，铃声，旋转…… ) 。 |
| [Charts](https://github.com/danielgindi/Charts)              | 适用于 iOS / tvOS / OSX 的漂亮图表！                         |
| [SwiftLocation](https://github.com/malcommac/SwiftLocation)  | 适用于 iOS 的高效且易于使用的位置跟踪框架。                  |
| [IQKeyboardManager](https://github.com/hackiftekhar/IQKeyboardManager) | 无代码插入式通用库允许防止键盘滑动问题并覆盖 UITextField / UITextView。既不需要编写任何代码也不需要任何设置等等。 |
| [MJRefresh](https://github.com/CoderMJLee/MJRefresh)         | 使用 pull-to-refresh 的简单方法。                            |
| [Kingfisher](https://github.com/onevcat/Kingfisher)          | 一个轻量级的纯 Swift 库，用于从 Web 下载和缓存图像。         |
| [SnapKit](https://github.com/SnapKit/SnapKit)                | 适用于 iOS 和 OS X 的 Swift Autolayout DSL。                 |
| [Reusable](https://github.com/AliSoftware/Reusable)          | 可以轻松地以类型安全的方式重用视图 ( UITableViewCells，UICollectionViewCells，自定义 UIViews，ViewControllers，Storyboards …… ) 。 |
| [Design-Patterns-In-Swift](https://github.com/ochococo/Design-Patterns-In-Swift) | 📖 在 Swift 5.0 中实现的设计模式。                            |
| [FSPagerView](https://github.com/WenchaoD/FSPagerView)       | FSPagerView 是一个优雅的屏幕幻灯片库。它对于制作横幅视图，产品展示，欢迎 / 指南页面，Screen / ViewController 滑块非常有用。 |
| [SkeletonView](https://github.com/Juanpe/SkeletonView)       | 一种优雅的方式，向用户显示正在发生的事情，并为他们正在等待的内容做好准备。 |
| [SideMenu](https://github.com/jonkykong/SideMenu)            | 适用于 iOS 的简单侧 / 滑动菜单控制，无需代码！很多定制。在5分钟或更短的时间内将其添加到您的项目中。 |

## VSCode

| name                                                      | desc                                 |
| --------------------------------------------------------- | ------------------------------------ |
| [vscode-mssql](https://github.com/microsoft/vscode-mssql) | Visual Studio 代码 SQL Server 扩展。 |

## 书籍

**Go**

| name                                                         | desc                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| [golang101](https://github.com/golang101/golang101)          | Go语言101 : 一本侧重于 Go 语言语法和语义的编程解释和指导书。 |
| [build-web-application-with-golang](https://github.com/astaxie/build-web-application-with-golang) | Golang 电子书介绍如何使用 Golang 构建 Web。                  |
| [gopl-zh](https://github.com/golang-china/gopl-zh)           | 📚 Go语言圣经中文版。                                         |
| [go-fundamental-programming](https://github.com/unknwon/go-fundamental-programming) | 《Go 编程基础》是一套针对 Google 出品的 Go 语言的视频语音教程，主要面向新手级别的学习者。 |
| [docker_practice](https://github.com/yeasy/docker_practice)  | 通过真正的 DevOps 练习，学习和了解 Docker 技术！             |
| [golang101](https://github.com/golang101/golang101) | Go语言101: 一本侧重于Go语言语法和语义的编程解释和指导书 |

**Swift**

| name                                                         | desc                                                         |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| [the-swift-programming-language-in-chinese](https://github.com/SwiftGGTeam/the-swift-programming-language-in-chinese) | 中文版 Apple 官方 Swift 教程《The Swift Programming Language》。 |

**Git**

| name                                                      | desc                                                         |
| --------------------------------------------------------- | ------------------------------------------------------------ |
| [git-recipes](https://github.com/geeeeeeeeek/git-recipes) | 🥡 Git recipes in Chinese by Zhongyi Tong. 高质量的 Git 中文教程。 |

## 博客

| name                                                         | desc                    |
| ------------------------------------------------------------ | ----------------------- |
| [hexo-theme-next](https://github.com/theme-next/hexo-theme-next) | Hexo 优雅而强大的主题。 |
