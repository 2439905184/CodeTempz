class 矩形居中{
    class Position{
        public float x;
        public float y;
    }
    public static void juzhong(ParentWidth,ParentHeight,rectWidth,rectHeight)
    {
        float x = (ParentWidth - rectWidth)/2;
        float y = (ParentHeight - rectWidth)/2;
        return new Position(x,y);
    }
}