f=open("a.txt",'r')

a=f.read()

print((a),end="")


c=(a.split('\n'))

r=';'.join(c);
print(r)
