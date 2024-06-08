function buscaCep() {
  let cep = document.getElementById('cep').value.trim() // Remove espaços em branco
  if (cep !== '') {
    let url = 'https://brasilapi.com.br/api/cep/v1/' + cep
    let req = new XMLHttpRequest()
    req.open('GET', url)
    req.send()

    //resposta
    req.onload = function () {
      if (req.status === 200) {
        let endereco = JSON.parse(req.response)
        document.getElementById('localidade').value = endereco.street || ''
        document.getElementById('bairro').value = endereco.neighborhood || ''
        document.getElementById('cidade').value = endereco.city || ''
        document.getElementById('uf').value = endereco.state || ''
      } else if (req.status === 404) {
        alert('CEP inválido')
      } else {
        alert('Erro! Tente novamente')
      }
    }

    req.onerror = function () {
      alert('Erro na requisição. Verifique sua conexão.')
    }
  } else {
    alert('Por favor, insira um CEP.')
  }
}

window.onload = function () {
  let cep = document.getElementById('cep')
  if (cep) {
    // Verificação adicional
    cep.addEventListener('blur', buscaCep)
  }
}
