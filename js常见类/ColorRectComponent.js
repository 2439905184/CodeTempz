class ColorRect extends HTMLElement
{
    constructor()
    {
        super()
    }
    connectedCallback()
    {
        // 请修改参数
        this.style.display = "inline-block"
        this.style.backgroundColor = "blue"
        this.style.width = "100px"
        this.style.height = "80px"
    }

}
customElements.define("color-rect",ColorRect)