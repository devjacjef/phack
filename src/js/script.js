// Interrupting the file toolbar

// TODO: Get this handling Create, Upload and Download
const toolbarForm = document.getElementById('fileToolbar');

toolbarForm.addEventListener('submit', function (event) {
    event.preventDefault();
    const clickedButton = event.submitter;
    const action = clickedButton.name;

    /**
    / The intention here is to have it create a new input
    / that if null deletes this row or if submitted and is empty, deletes the row
    / if there is something there without a file extension create it anyways
    */
    if (action === 'create') {
        // TODO: Make it show a new entry for the table.
        let fileTable = document.getElementById('fileBrowserTable');

        let newRow = fileTable.insertRow(-1);

        let newCell = newRow.insertCell(0);

        newCell.colSpan = 5;

        let newInput = document.createElement("input");

        newInput.placeholder = "filename.txt";

        newCell.appendChild(newInput);
    } else if (action === 'upload') {
        // TODO: Handle upload.
    } else if (action === 'download') {
        // TODO: Handle download
    }

    console.log(action);
});
