// Interrupting the file toolbar

// TODO: Get this handling Create, Upload and Download
const toolbarForm = document.getElementById('fileToolbar');

toolbarForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const clickedButton = event.submitter;
    const action = clickedButton.name;

    if (action === 'create') {
        // TODO: Make it show a new entry for the table.
        let fileTable = document.getElementById('fileBrowserTable');

        let newRow = fileTable.insertRow(-1);

        let newCell = newRow.insertCell(0);

        newCell.colSpan = 5;

        let newText = document.createTextNode("New bottom row");
        newCell.appendChild(newText);
    } else if (action === 'upload') {
        // TODO: Handle upload.
    } else if (action === 'download') {
        // TODO: Handle download
    }

    console.log(action);
});
