<!DOCTYPE html>
<html>
<head>
    <title>Data Table and Excel Download</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<style>
    table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
}

th, td {
    padding: 8px;
    text-align: left;
}
</style>

<script>
    document.addEventListener("DOMContentLoaded", function() {
    const downloadButton = document.getElementById("downloadButton");

    // Add an event listener to the download button
    downloadButton.addEventListener("click", () => {
        // Replace with your SQL query to fetch data from the database
        // For simplicity, we'll use dummy data here
        const data = [
            ["John Doe", "Box 1", "2023-08-15", "Cable 1"],
            ["Jane Smith", "Box 2", "2023-08-20", "Cable 2"],
            // Add more rows as needed
        ];

        // Create a new Excel workbook and add the data
        const workbook = XLSX.utils.book_new();
        const sheetData = [ ["Name", "Box", "Modify", "Cable"], ...data ];
        const worksheet = XLSX.utils.aoa_to_sheet(sheetData);
        XLSX.utils.book_append_sheet(workbook, worksheet, "Data");

        // Create a Blob object to save the workbook
        const blob = XLSX.write(workbook, { bookType: 'xlsx', type: 'blob' });

        // Create a download link and trigger the download
        const downloadLink = document.createElement("a");
        downloadLink.href = URL.createObjectURL(blob);
        downloadLink.download = "data.xlsx";
        downloadLink.click();
    });
});
</script>

<body>
    <h1>Data Table</h1>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Box</th>
                <th>Modify</th>
                <th>Cable</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data rows will be inserted here -->
        </tbody>
    </table>
    
    <button id="downloadButton">Download Excel</button>
    
    <script src="script.js"></script>
</body>
</html>
