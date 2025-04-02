'下面内容由 VisualFreeBasic 5.9.5 自动产生，请勿自己修改
'[VFB_PROJECT_SETUP_START]
'NumObjects=1
'ProjectName=textUtil
'CompilationMode=0
'CompilationDebug=0
'ProjectType=GUI
'UseGDIPlus=0
'ShowConsole=1
'MultiLanguage=0
'OmitInformation=0
'StartupIcon=
'UseWinXPthemes=1
'StrUnicode=0
'UseAdminPriv=0
'DeleteGeneratedCode=1
'Namespace=0
'AutoAdd64=0
'AddCompOps=
'LastRunFilename=textUtil
'Major=0
'Minor=0
'Revision=0
'Build=0
'FileMajor=0
'FileMinor=0
'FileRevision=0
'FileBuild=2
'AutoIncrement=3
'DefaultCompiler=32
'Comments=
'CompanyName=
'FileDescription=
'LegalCopyrights=
'LegalTrademarks=
'ProductName=

'Module=.\textUtil.bas|0|2421||Yes|
'TopTab=.\textUtil.bas|True|0|2421
'[VFB_PROJECT_SETUP_END]
#define UNICODE   '表示WIN的API默认使用 W系列，宽字符处理，如果删除（使用ASCII字符）
#lang "FB"        '表示为标准FB格式

'【注意！注意！注意！注意！】
'假如没有“{visua....lib}”标记(见下面)，VFB就不会对代码加工，将会直接编译，适合网上找的纯代码例题
'VisualFreeBasic 对代码加工如下：（为了简化写代码）
'1，把中文代码替换成英文代码后编译，让FreeBasic支持中文代码（前提：VFB选项中选择了这个功能，默认选择的）
'2，提取函数名，类、全局变量等的定义设置放到单独文件中引用。让你写代码无需考虑函数先后顺序问题，以及自己写定义。
'3，自动检查代码调用了【源码库】和【我的代码库】，把相关代码全部放入单独文件中引用。让我们可以直接使用源码库，而无需自己去复制源码。
'4，当你工程属性选择多国语言，将支持多国语言函数。多国语言用法见相关例题。
'5，当工程中包含其它模块时，自动帮你引用。不然就需要自己写代码引用。
' 当编译提示找不到函数时，表示没有引用相关的库，比方使用 WIn的API，需要 #include Once "windows.bi"
'#include Once "windows.bi"      'WIN系统基础库，主要是WIN系统常用的API，不使用API可以不包含它。
'#include Once "win/shlobj.bi"   'WIN系统对象库，shell32.dll的头文件，主要涉及shell及通用对话框等。
'#include Once "vbcompat.bi"     '一些兼容VB的语句和常数，不包含就会无法使用它们了。
'#include Once "afx/CWindow.inc" 'WinFBX 库，是WIN系统增强基础库，使用窗口和控件必须要用到它。
'#include Once "fbthread.bi"     'VisualFreeBasic线程语句支持库，要用线程语句，就必须包含。

'{visualfreebasic_lib} 'VFB函数库插入的位置(全部小写,在引用必要础库之后),这是让BAS工程支持使用VFB里的【VFB代码库】和【我的代码库】等,去掉后就无法支持。

' 欢迎来到纯代码世界！ 这里是自由的代码世界，任你翱翔。

Function readAllText(fname As String) As String
   Open fname For Input As #1
   Dim As String ln
   Do Until( EOF(1) )
    Line Input #1, ln
    ln = ln + ln
 Loop
     Return ln           
   Close #1
End Function 




