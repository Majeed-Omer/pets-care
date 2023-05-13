const select = document.getElementById('styledSelect1');
const content1 = document.getElementById('species');
const content2 = document.getElementById('missing_stolen');

select.addEventListener('change', () => {
    if (select.value === 'species') {
        content1.style.display = 'block';
        content2.style.display = 'none';
    } else if(select.value === 'missing_stolen') {
        content1.style.display = 'none';
        content2.style.display = 'block';
    }
});