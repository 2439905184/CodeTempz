class ToggleButton extends HTMLElement
{
    constructor()
    {
        super()
        this.isToggled = false
        this.onclick = (e)=>
        {
            this.isToggled = !this.isToggled
            console.log(this.isToggled);
            if(this.isToggled)
            {
                this.style = "background-color:blue;color:white"
            }
            else
            {
                this.style = "background-color:none"
            }
        }
    }

}
customElements.define("toggle-button",ToggleButton)