import unittest
import requests
import json

class TestMain(unittest.TestCase):

    def testcrearusuario(self):
        post = {"nombre": "prueba", "tipo": "Funcionario", "contraseña": "12345", "Vcontraseña": "12345"}
        response = requests.get("http://localhost:3000/INF225-2024-1-GRUPO-9/Main/processes/registrarse.php", json=post)
        print(response.statuscode)
        self.assertEqual(response.statuscode, 200)

    def test_iniciar_sesion(self):
        post = {"nombre": "prueba", "tipo": "Funcionario", "contraseña": "12345"}
        response = requests.get("http://localhost:3000/INF225-2024-1-GRUPO-9/Main/processes/iniciar-sesion.php", json=post)
        print(response.status_code)
        self.assertEqual(response.status_code, 200)

    def test_agendar_hora(self):
        post = {"rut": "12345678-9", "datetime": "2024-05-05 11:22:33", "exam_type": "radiografía creaneal", "exam_department": "radiografía"}
        response = requests.get("http://localhost:3000/INF225-2024-1-GRUPO-9/Main/processes/registrarse.php", json=post)
        print(response.status_code)
        self.assertEqual(response.status_code, 200)

if __name__ == '__main':
    unittest.main()