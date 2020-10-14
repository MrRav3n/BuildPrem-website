(() => {
    const lang = navigator.language
    if(lang !== 'pl-PL') {
        window.location.replace('./index.en.html');
    }
})();
