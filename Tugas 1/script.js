function appendToResult(value) {
    document.getElementById('result').value += value;
}

function clearAll() {
    document.getElementById('result').value = '';
}

function deleteLast() {
    const currentValue = document.getElementById('result').value;
    document.getElementById('result').value = currentValue.slice(0, -1); // Menghapus karakter terakhir
}

function calculate() {
    const input = document.getElementById('result').value;
    try {
        const result = eval(input.replace('^', '**')); // mengganti pangkat dengan operator python
        document.getElementById('result').value = result;
    } catch (error) {
        document.getElementById('result').value = 'Error';
    }
}
