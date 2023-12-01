CKEDITOR.plugins.add( 'variable', {
    icons: 'variable',
    init: function( editor ) {
        editor.addCommand( 'insertVariable', {
            exec: function( editor ) {
                let el = editor.ui.contentsElement.$;
                displayVariables(editor, el);
            }
        });
        editor.ui.addButton( 'Variable', {
            label: 'Insert Variable',
            command: 'insertVariable',
            toolbar: 'insert'
        });
    }
});

function retrieveVariables() {
    return [
        {name: 'Median Salary', value: '<span class="median_salary">Median_Salary</span>'},
        {name: 'Mean Salary', value: '<span class="mean_salary">Mean_Salary</span>'},
        {name: 'Max Salary', value: '<span class="max_salary">Max_Salary</span>'},
        {name: 'Min Salary', value: '<span class="min_salary">Min_Salary</span>'},
        {name: 'Respondents Number', value: '<span class="number_respondents">Respondents_Number</span>'},
        {name: 'Top 3 benefits', value: '<span class="top_three_benefits">Top_3_benefits</span>'},
        {name: 'Field Name', value: '<span class="field_text">Field_Name</span>'}
    ];
}

function displayVariables(editor, activator) {
    let prev_container = document.querySelector('.variable-list');
    if (prev_container != null) {
        prev_container.remove();
        return;
    }

    let container = document.createElement('div');
    container.style.top = (window.scrollY + activator.getBoundingClientRect().top) + 'px';
    container.style.left = (activator.getBoundingClientRect().left) + 'px';
    container.classList.add('variable-list');
    const variables = retrieveVariables();
    variables.forEach((el) => {
        let option = document.createElement('p');
        option.innerText = el.name;
        option.dataset.value = el.value;
        option.classList.add('variable-option');
        container.append(option)
    })
    document.body.append(container);
    document.querySelectorAll('.variable-option').forEach((el) => {
        el.addEventListener('click', () => {
            editor.insertHtml( ' ' + el.dataset.value + ' ');
            container.remove();
        })
    })
}
