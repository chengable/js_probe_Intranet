js_probe_Intranet
利用xss探测内网

这个小工具的原理很简单，通过webrtc获取内网地址，然后将内网地址遍历
利用script去加载每个地址，如果地址存在，那么会触发onload，记录下地
址，然后这个思路很好，实现起来是很坑爹的，因为一个内网地址有255个需
要探测，其中大多是是无效的地址，，一次timeout好几秒，整个
跑完需要5分钟以上，谁会在你xss的页面停留5分钟啊，时间太长，也是没办
法的，很坑爹，由于是script方法的，所以只能探测web端口，像22,21这些
系统服务的按理说用伪协议可以探测，但是会弹框，别人就发现了，所以系统
服务是探测不了的，只能探测web端口，
