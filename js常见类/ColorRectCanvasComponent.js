class ColorRect extends HTMLElement {
    constructor() {
      super();
      this.canvas = document.createElement("canvas");
    }
  
    connectedCallback() {
      this.appendChild(this.canvas);
  
      // 设置canvas的样式和属性
      this.canvas.style.display = "inline-block";
      this.canvas.style.backgroundColor = "blue";
      this.canvas.width = 100;
      this.canvas.height = 80;
  
      // 在canvas上绘制内容
      const ctx = this.canvas.getContext("2d");
      ctx.fillStyle = "black";
      ctx.fillRect(0, 0, this.canvas.width, this.canvas.height);
    }
  }
  
  customElements.define("color-rect", ColorRect);  