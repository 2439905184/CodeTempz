
struct position 
{
    float x;
    float y;
};
struct position juzhong(ParentWdith,ParentHeight,rectWdith,rectHeight)
{
    struct position pos;
    pos.x = (ParentWdith - rectWdith)/2;
    pos.y = (ParentHeight - rectHeight)/2;
    return pos;
}