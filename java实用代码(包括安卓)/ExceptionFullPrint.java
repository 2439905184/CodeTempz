public class ExcecptionFullPrint
{
    public static void get(Exception e)
    {
        // 获取异常信息，包含类型和消息
        String exceptionType = e.getClass().getSimpleName();
        String message = e.getMessage();

        // 构造基础日志信息
        String logMessage = message != null ?
                exceptionType + ": " + message :
                exceptionType + " occurred";

        // 记录完整异常堆栈（自动处理null）
        Log.e("wrapperException", logMessage, e);

        // 追踪根本原因（递归处理可选）
        Throwable cause = e.getCause();
        int depth = 1;
        while (cause != null) {
            String causeLog = "Caused by (" + depth + "): " +
                    cause.getClass().getSimpleName() +
                    (cause.getMessage() != null ?
                            ": " + cause.getMessage() : "");
            Log.e("wrapperException", causeLog, cause);
            cause = cause.getCause();
            depth++;
        }
    }
}