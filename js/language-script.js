(() => {
    const lang = navigator.language
    let location = window.location.href.split('/');
    location = location[location.length-1];
    let dontNavigate = sessionStorage.getItem('dontNavigate')
    if(lang !== 'pl-PL' && location !== 'index.en.html' && !dontNavigate) {
        localStorage.setItem('dontNavigate', 'true');
        console.log('Navigating to ENG version');
        window.location.replace('./index.en.html');
    }
})();

dontNavigate = () => {
    sessionStorage.setItem('dontNavigate', 'true');
}
