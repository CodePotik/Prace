lista = [1, 2 ,3 ,4 ,5 ,6, 7, 8, 9, 10]

s = 0
for i in range(len(lista)):
    s += lista[i]

print(s)


liczby = list(range(10, 30, 2))
print()
for i in liczby:
    print(i)

index = 0
while index < len(liczby):
    print("liczby[", index, "] =", liczby[index])
    index += 1
print()
print(len(liczby))


T = [11, 1, 12, 10, 0]
M = [2, 4 ,6 ,8, 7]
print()

T.extend(M)
print(T)

dni_tyg = ['pn', 'wt', 'sr', 'czw', 'pt', 'sob', 'ndz']
print()

print(dni_tyg[2:6])
print(dni_tyg[::-1])
print(dni_tyg[-1:])

import random
P=[]
for i in range(10):
     P.append(random.randint(1, 100))


print(P)
a = int(input("Wprowadź wybraną liczbę"))
print()

if a in P:
    print("Liczba", a, "Znajduje się na liscie")
else:
     print("Liczba", a, "Nie znajduje się na liscie")

Imiona = ["Jakub", "Bartosz", "Julia", "Agata"]
print(Imiona)

Imiona.insert(int(input("Podaj miejsce:")), input("Podaj Imię:"))

print(Imiona)

L=[]
for i in range(10):
     L.append(random.randint(1, 100))
print(L)
print(min(L))
print(max(L))


     
