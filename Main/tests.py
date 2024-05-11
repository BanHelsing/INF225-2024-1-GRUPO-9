import unittest
import requests
import json

class TestMain(unittest.TestCase):
    
    def test_crear_usuario(self):
        post = {"nombre": "prueba", "tipo": "Funcionario", "contraseña": "12345", "Vcontraseña": "12345"}
        response = requests.get("http://localhost:3306/ProyectoIngSoft/INF225-2024-1-GRUPO-9/Main/processes/registrarse.php", json=post)
        print(response.status_code)
        self.assertEqual(response.status_code, 200)
        
if __name__ == '__main__':
    unittest.main()