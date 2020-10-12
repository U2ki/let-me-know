window.addEventListener('DOMContentLoaded', ()=>{
    document.querySelectorAll('[data-selector]').forEach(x=>{
        const selector=x.dataset["selector"];
        x.addEventListener('click',()=>{
            const content=x.closest('.d-flex').querySelector(selector).textContent;
            (async()=>Object.assign(document.createElement('textarea'),{
                textContent:content,
                style:'positon:absolute;top:-999px',
            }))()
                .then(res=>document.querySelector('body').appendChild(res))
                .then(res=>void(res.select(),document.execCommand('copy'))||res)
                .then(res=>document.querySelector('body').removeChild(res));
        });
    });
});
