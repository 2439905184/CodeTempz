import org.godotengine.godot.Godot;
import org.godotengine.godot.plugin.GodotPlugin;
import org.godotengine.godot.plugin.SignalInfo;
//Godot安卓插件模板
public class GodotPluginTpz extends GodotPlugin
{
    public FrameLayout layout;
    //Godot是继承自activity的类 从这里获得activity实例
    public HelloGodot(Godot godot)
    {
        super(godot);
       // MyContext=getActivity();//.getApplicationContext();
    }
    @Override
    public View onMainCreate(Activity activity)
    {
        this.layout=new FrameLayout(activity);
        return this.layout;
    }

    @NonNull
    @Override
    public Set<SignalInfo> getPluginSignals()
    {
        //信号集合 存自定义信号的地方 用于和godot信号系统交互
        Set<SignalInfo> signals = new ArraySet<SignalInfo>();

        signals.add(new SignalInfo("on_test"));

        return signals;
        //return super.getPluginSignals();
    }
    //自定义方法
    // var s=Engine.get_singleton("GodotAdMob")之后
    //s.test()可以直接调用这个方法 应该必须是public方法
    //返回给godot调用的方法名称 用于映射和架桥
    @NonNull
    @Override
    public List<String> getPluginMethods()
    {

        return Arrays.asList(
                new String[]{"test2"});
        // return Collections.singletonList("helloWorld");
    }
    public String test2()
   {
       return "test2";
   }
   @NonNull
   //返回安卓插件的名称
   @Override
   public String getPluginName()
   {
       return "HelloGodot";
   }
}
