class Modal {
    constructor() {
        this.modal = null;
        this.iframe = null;
    }

    init() {
        // 创建模态窗口元素并添加到 body 中
        const modalElem = document.createElement('div');
        modalElem.id = 'modal';
        modalElem.className = 'modal';
        modalElem.innerHTML = `
      <div class="modal-content">
        <span class="close">&times;</span>
        <iframe id="modal-iframe"></iframe>
      </div>
    `;
        document.body.appendChild(modalElem);

        // 获取模态窗口和 iframe 元素
        this.modal = document.getElementById('modal');
        this.iframe = document.getElementById('modal-iframe');

        // 给关闭按钮添加事件监听器
        const closeBtn = this.modal.querySelector('.close');
        closeBtn.addEventListener('click', () => this.close());
    }

    open(url) {
        // 打开模态窗口并设置 iframe 的 src 属性
        this.modal.style.display = 'block';
        this.iframe.src = url;
    }

    close() {
        // 关闭模态窗口并将 iframe 的 src 属性设置为空
        this.modal.style.display = 'none';
        this.iframe.src = '';
    }
}

